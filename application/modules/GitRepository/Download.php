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

class GitRepository_Download extends PageCarton_Widget
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
	public function hook( $object, $method, &$data )
    {
        if( $method !== 'getDownloadContent' )
        {
            return false;
        }
        if( empty( $data['git'] ) )
        {
            return false;
        }
        $data['git'] = str_ireplace( array( '.git', '.zip', '.tar.gz', 'https://', 'http://' ), '', $data['git'] );
        $data['git'] = 'https://' . $data['git'] . '/archive/master.tar.gz';
        $data['download_url'] = $data['git'];
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

            //  Output demo content to screen
             $this->setViewContent( self::__( '<h1>Hello PageCarton Widget</h1>' ) ); 
             $this->setViewContent( self::__( '<p>Customize this widget (' . __CLASS__ . ') by editing this file below:</p>' ) ); 
             $this->setViewContent( self::__( '<p style="font-size:smaller;">' . __FILE__ . '</p>' ) ); 
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
