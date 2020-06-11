<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    GitRepository_Download
 * @copyright  Copyright (c) 2020 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Download.php Monday 8th of June 2020 09:23PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class GitRepository_Download extends GitRepository
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
	protected static $_objectTitle = 'Download from Git Repository'; 

    /**
     * 
     * 
     */
	public static function hook( $object, $method, &$data )
    {
        if( $method !== 'getDownloadContent' )
        {
            return false;
        }
        if( empty( $data['git_link'] ) )
        {
            return false;
        }
        if( $url = self::filterGitUrl( $data['git_link'] ) )
        {
        //    $data['download_url'] = $url;
        }
    }

    /**
     * Performs the whole widget running process
     * 
     */
	public function init()
    {    
		try
		{ 
            //  Code that runs the widget goes here...

            // end of widget process
          
		}  
		catch( Exception $e )
        { 
            $this->setViewContent( self::__( '<p class="badnews">Theres an error in the code</p>' ) ); 
            return false; 
        }
	}
	// END OF CLASS
}
