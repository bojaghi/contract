<?php
/**
 * Bojaghi Contract
 *
 * @package Bojaghi\Contract
 */

declare( strict_types=1 );

namespace Bojaghi\Contract;

/**
 * Container factory interface
 */
interface Container_Factory {
	/**
	 * Creates a container instance
	 *
	 * @param array|string $setup setup array or string of configuration file path.
	 *
	 * @return Container
	 */
	public static function create( array|string $setup ): Container;
}
