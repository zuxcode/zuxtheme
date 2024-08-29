<?php

namespace ZUXTHEME\Inc\Classes;

use ZUXTHEME\Inc\Traits\Singleton;
class Menu {
  use Singleton;

	protected function __construct() {
    $this->setup_hooks();
	}

  protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'after_setup_theme', [ $this, 'setup_menu' ] );

	}
  public function setup_menu() {
    echo '<br/>Menu setup<br/>';
  }
}