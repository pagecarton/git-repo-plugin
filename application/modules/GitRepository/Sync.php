<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    GitRepository_Sync
 * @copyright  Copyright (c) 2020 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Sync.php Monday 8th of June 2020 09:32PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class GitRepository_Sync extends GitRepository
{
	
    /**
     * Access level for player. Defaults to everyone
     *
     * @var boolean
     */
	protected static $_accessLevel = array( 0 );
	
    /**
     * 
     * 
     * @var string 
     */
	protected static $_objectTitle = 'Syncronise Git Repository'; 

    /**
     * Performs the whole widget running process
     * 
     */
	public function init()
    {    
		try
		{ 
            //  Code that runs the widget goes here...

            if( empty( $_REQUEST['article_url'] ) )
            {
                $this->setViewContent( '<p class="badnews">No ID of the plugin to synchronize is set</p>' ); 
                return false;
            }
            if( empty( $_REQUEST['ref'] ) )
            {
            //    $this->setViewContent( '<p class="badnews">This sync is built to only work when the "master" branch is pushed.</p>' ); 
             //   return false;
            }
            $postId = $_REQUEST['article_url'];
            if( ! $postData = Application_Article_Abstract::loadPostData( $postId ) )
            {
                $this->setViewContent( '<p class="badnews">Post data not found for plugin</p>' ); 
                return false;
            }
            if( empty( $postData['download_url'] ) )
            {
                $this->setViewContent( '<p class="badnews">Plugin file has not been uploaded</p>' ); 
                return false;
            }

            if( ! $url = self::filterGitUrl( $postData['git_link'] ) )
            {
                $this->setViewContent( '<p class="badnews">GIT URI not properly set</p>' ); 
                return false;
            }
                
            if( ! $content = self::fetchLink( $url, array( 'time_out' => 3600, 'connect_time_out' => 360, 'raw_response_header' => true, 'return_as_array' => true, ) ) )
            {
                if( ! $url = self::filterGitUrl( $postData['git_link'], 'main' ) )
                {
                    $this->setViewContent( '<p class="badnews">GIT URI not properly set</p>' ); 
                    return false;
                }
                if( ! $content = self::fetchLink( $url, array( 'time_out' => 3600, 'connect_time_out' => 360, 'raw_response_header' => true, 'return_as_array' => true, ) ) )
                {
                    $this->setViewContent( 'NOT ABLE TO CONNECT TO REPOSITORY - ' . $url . ' ' );
                }
            }

            $filename = Ayoola_Doc::getDocumentsDirectory() . DS . $postData['download_url'];
            if( ! is_file( $filename ) )
            {
            //    $this->setViewContent( '<p class="badnews">Plugin file data is lost</p>' ); 
            //    return false;
            }

            $tmpDir = CACHE_DIR . DS . __CLASS__ . DS . $postData['article_url'] . DS . time();
            Ayoola_Doc::createDirectory( $tmpDir  );
            $tmp = tempnam( CACHE_DIR, __CLASS__ ) . '';  

            $tmp .= '.tar.gz';
            Ayoola_File::putContents( $tmp, $content['response'] );  
            $repository = 'Ayoola_Phar_Data';
            $repository = new $repository( $tmp );
            $repository->extractTo( $tmpDir, null, true );
            $dirPcBaseX = Ayoola_Doc::getDirectories( $tmpDir );
            $dirPcBase = array_pop( $dirPcBaseX );
    
            try
            {
                if( ! $pluginData = file_get_contents( $dirPcBase . DS . 'extension_information' ) )
                {
                    $this->setViewContent( '<p class="badnews">Plugin meta-data is not in this repository</p>' ); 
                    return false;
                }
                if( ! $previousData = json_decode( $pluginData, true ) ) 
                {
                    $this->setViewContent( '<p class="badnews">Plugin meta-data is not in JSON format</p>' ); 
                    return false;
                }
                if( empty( $previousData['extension_name'] )  ) 
                {
                    $this->setViewContent( '<p class="badnews">Bad plugin data</p>' ); 
                    return false;
                }
            }
            catch( Exception $e )
            {
                $this->setViewContent( '<p class="badnews">Plugin file structure not in the right format</p>' ); 
                return false;
            }
            $tmp2 = tempnam( CACHE_DIR, __CLASS__ ) . '.tar';  

            $newArchive = new Ayoola_Phar_Data( $tmp2 );
            $newArchive->startBuffering();
            $newArchive->buildFromDirectory( $dirPcBase );    
            $newArchive->stopBuffering();		
            $newArchive->compress( Ayoola_Phar::GZ ); 
            
        //    unset( $newArchive );
        //    var_export( $filename );
            if( ! copy( $tmp2 . '.gz', $filename ) )
            {
                $this->setViewContent( '<p class="badnews">Plugin could not be saved</p>' ); 
                return false;
            }
            $postData['git_last_sync_time'] = time();
            Application_Article_Abstract::saveArticle( $postData );

            $this->setViewContent( '<p class="goodnews">GIT url ' . $url . ' synchronized with plugin ' . $postData['article_title'] .  ' </p>' ); 
            return true;
            // end of widget process  
		}  
		catch( Exception $e )
        { 
            //  Alert! Clear the all other content and display whats below.
            $this->setViewContent( self::__( '<p class="badnews">Theres an error in the code</p>' ) ); 
            return false; 
        }
	}
	// END OF CLASS
}
