<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_login extends Controller
{
    public function action_login()

    {
        if (\Input::method() == 'POST')
        {
            \Response::redirect_back('/');
           // echo \Input::param('username');

            // check the credentials.
            if (\Auth::instance()->login(\Input::param('username'), \Input::param('password')))
            {

                // did the user want to be remembered?
                if (\Input::param('remember', false))
                {
                    // create the remember-me cookie
                    \Auth::remember_me();
                }
                else
                {
                    // delete the remember-me cookie if present
                    \Auth::dont_remember_me();
                }

                // logged in, go back to the page the user came from, or the
                // application dashboard if no previous page can be detected
                \Response::redirect_back('_root_');
            }
            else
            {
                // login failed, show an error message
                //\Messages::error(__('login.failure'));
            }
        }


        return View::forge('login');
    }

    public  function action_logout()
    {
       return \Response::redirect('/login');
    }

}
