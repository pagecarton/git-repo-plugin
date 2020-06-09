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

class GitRepository_Sync extends PageCarton_Widget
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
            $postId = $_REQUEST['article_url'];
            if( ! $postData = Application_Article_Abstract::loadPostData( $postId ) )
            {
                $this->setViewContent( '<p class="badnews">Post data not found for plugin</p>' ); 
                return false;
            }
            if( ! empty( $postData['download_url'] ) )
            {
                $this->setViewContent( '<p class="badnews">Plugin file has not been uploaded</p>' ); 
                return false;
            }

            if( ! $url = self::filterGitUrl( $postData['git'] ) )
            {
                $this->setViewContent( '<p class="badnews">GIT URI not properly set</p>' ); 
                return false;
            }
                
            if( ! $content = self::fetchLink( $url, array( 'rand' => time(), 'time_out' => 3600, 'connect_time_out' => 360, 'raw_response_header' => true, 'return_as_array' => true, ) ) )
            {
                $this->setViewContent( 'NOT ABLE TO CONNECT TO REPOSITORY - ' . $url . ' ' );
            }

            $filename = Ayoola_Doc::getDocumentsDirectory() . DS . $postData['download_url'];
            if( ! is_file( $filename ) )
            {
                $this->setViewContent( '<p class="badnews">Plugin file data is lost</p>' ); 
                return false;
            }

            Ayoola_File::putContents( $filename, $content['response'] );  
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
