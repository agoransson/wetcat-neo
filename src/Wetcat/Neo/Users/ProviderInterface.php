<?php namespace Wetcat\Neo\Users;
/**
 * "Stolen" from Cartalyst/Sentry. =)
 *
 * Part of the Sentry package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Wetcat\Neo\Groups\GroupInterface;

interface ProviderInterface {

  /**
   * Finds a user by the given user ID.
   *
   * @param  mixed  $id
   * @return array
   * @throws \Wetcat\Neo\Users\UserNotFoundException
   */
  public function findById($id);

  /**
   * Finds a user by the login value.
   *
   * @param  string  $email
   * @return array
   * @throws \Wetcat\Neo\Users\UserNotFoundException
   */
  public function findByEmail($email);

  /**
   * Finds a user by the given activation code.
   *
   * @param  string  $code
   * @return array
   * @throws \Wetcat\Neo\Users\UserNotFoundException
   * @throws InvalidArgumentException
   * @throws RuntimeException
   */
  public function findByActivationCode($code);

  /**
   * Finds a user by the given reset password code.
   *
   * @param  string  $code
   * @return array
   * @throws RuntimeException
   * @throws \Wetcat\Neo\Users\UserNotFoundException
   */
  public function findByResetPasswordCode($code);

  /**
   * Returns an all users.
   *
   * @return array
   */
  public function findAll();

  /**
   * Returns all users who belong to
   * a group.
   *
   * @param  string  $group
   * @return array
   */
  public function findAllInGroup($group);

  /**
   * Creates a user.
   *
   * @param  array  $credentials
   * @return array
   */
  public function create(array $credentials);

}