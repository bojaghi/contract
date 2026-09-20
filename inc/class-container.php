<?php
/**
 * Bojaghi Contract
 *
 * @package Bojaghi\Contract
 */

declare( strict_types=1 );

namespace Bojaghi\Contract;

use Psr\Container\ContainerInterface;

/**
 * Our container interface
 */
interface Container extends ContainerInterface {
	/**
	 * Invoke $to_call
	 *
	 * @param callable|array|string $to_call Any callable functions, or class methods.
	 * @param mixed                 $args    Arguments to privide.
	 *
	 * @return mixed
	 */
	public function call( callable|array|string $to_call, mixed $args = null ): mixed;

	/**
	 * Parse callback
	 *
	 * Available forms:
	 * - String: FQCN of the function. '<id>@<method>' style is also valid.
	 *           '<id>' is any string that can fetch from the container.
	 * - Array: class methods, including static methods.
	 * - Callable: lambda functions, or inline functions.
	 *
	 * @param string|array|callable $callback string, function, and class method.
	 *
	 * @return string|array|callable|null
	 */
	public function parse_callback( string|array|callable $callback ): string|array|callable|null;

	/**
	 * Get instance by its id
	 *
	 * @param string    $id    identifier to fetch.
	 * @param mixed     $args  arguments.
	 * @param bool|null $reuse true when instance is reused, false to create fresh one.
	 *
	 * @return mixed
	 */
	public function instantiate( string $id, mixed $args = null, bool|null $reuse = null ): mixed;

	/**
	 * Drop instances by its id
	 *
	 * @param string $id identifier of instance to forget.
	 */
	public function drop( string $id ): void;
}
