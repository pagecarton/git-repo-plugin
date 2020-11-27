<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    GitRepository
 * @copyright  Copyright (c) 2020 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: GitRepository.php Monday 8th of June 2020 09:22PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class GitRepository extends PageCarton_Widget
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
	protected static $_objectTitle = 'Git Repository Manager'; 

    /**
     * 
     * 
     */
	public static function filterGitUrl( $url, $repo = 'master' )
    {
        if( empty( $url ) )
        {
            return false;
        }
        $url = str_ireplace( array( '.git', '.zip', '.tar.gz', 'https://', 'http://' ), '', $url );
        $url = 'https://' . $url . '/archive/' . $repo . '.tar.gz';
        return $url;
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
            //  Alert! Clear the all other content and display whats below.
        //    $this->setViewContent( self::__( '<p class="badnews">' . $e->getMessage() . '</p>' ) ); 
            $this->setViewContent( self::__( '<p class="badnews">Theres an error in the code</p>' ) ); 
            return false; 
        }
	}
	// END OF CLASS
}
