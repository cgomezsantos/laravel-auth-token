<?php
/**
 * Created by IntelliJ IDEA.
 * User: tappleby
 * Date: 2013-05-11
 * Time: 2:53 PM
 * -----------------------
 * Editor: cgomezsantos
 * Edit Date: 2015-04-02
 * Edit Time: 1:32 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Tappleby\AuthToken;


use Illuminate\Auth\UserInterface;

/**
 * Class AuthTokenProviderInterface
 * @package Tappleby\AuthToken
 */
interface AuthTokenProviderInterface {


  /**
   * Creates an auth token for user.
   *
   * @param \Illuminate\Auth\UserInterface $user
   * @return \TAppleby\AuthToken\AuthToken|false
   */
  public function create(UserInterface $user);


  /**
   * Find user id from auth token.
   *
   * @param $serializedAuthToken string
   * @return \TAppleby\AuthToken\AuthToken|null
   */
  public function find($serializedAuthToken);

  /**
   * Returns serialized token.
   *
   * @param AuthToken $token
   * @return string
   */
  public function serializeToken(AuthToken $token);

  /**
   * Deserializes token.
   *
   * @param string $payload
   * @return AuthToken
   */
  public function deserializeToken($payload);

  /**
   * @param mixed|\Illuminate\Auth\UserInterface $identifier
   * @return bool
   */
  public function purge($identifier);
  
    /**
   * Touches the token for later p.
   *
   * @param $serializedAuthToken string
   * @return Boolean
   */
  public function touch($serializedAuthToken);
  
  /**
   * Deletes an specific auth token.
   *
   * @param $serializedAuthToken string
   * @return Boolean
   */
  public function remove($serializedAuthToken);
}