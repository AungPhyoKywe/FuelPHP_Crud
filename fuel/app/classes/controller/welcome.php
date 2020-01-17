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
class Controller_Welcome extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()

	{
	    $person =\Model_Person::find('all');

		return View::forge('welcome/index',array('person'=>$person));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
    /**
     * The add action for the application.
     *
     * @access  public
     * @return  Response
     */

    public function action_add()
    {
        $view = View::forge('welcome/add');

        if (\Input::method() == 'POST') {
            $product = \Model_Person::forge(\Input::all());
            //var_dump($product);

            try {
                $config = array(
                    'path' => DOCROOT.DS.'assets/images',
                    'max_size' => 1048576,
                    'randomize' => true,
                    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
                );

                \Upload::process($config);

                if (\Upload::is_valid()) {
                    \Upload::save();
                    $value = \Upload::get_files();
                    //var_dump($path);
                    $product->image =  $value[0]['saved_as'];
                }

                $product->save();

               \Response::redirect('/');

            } catch (\Orm\ValidationFailed $e) {
                $view->content->set(array(
                    'fields' => $product,
                    'errors' => $e->getMessage()), null, false);
            }
        }

        return \Response::forge($view);
    }

    public function action_delete($id)
    {
        $person =\Model_Person::find($id);
        $person->delete();
        \Response::redirect('/');
    }
    public function action_edit($id)
    {
        $person = \Model_Person::find($id);
        $view = View::forge('welcome/edit', array('person' => $person));


        if (\Input::method() == 'POST') {
            $product = \Model_Person::forge(\Input::all());

            try {
                $config = array(
                    'path' => DOCROOT.DS.'assets/images',
                    'max_size' => 1048576,
                    'randomize' => true,
                    'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
                );

                \Upload::process($config);

                if (\Upload::is_valid()) {
                    \Upload::save();
                    $value = \Upload::get_files();
                    //var_dump($path);
                    $product->image =  $value[0]['saved_as'];
                }
                $product->save();

                \Response::redirect('/');

            } catch (\Orm\ValidationFailed $e) {
                $view->content->set(array(
                    'fields' => $product,
                    'errors' => $e->getMessage()), null, false);
            }
        }
        return \Response::forge($view);
    }
}
