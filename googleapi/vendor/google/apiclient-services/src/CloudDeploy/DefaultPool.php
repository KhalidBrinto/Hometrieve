<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudDeploy;

class DefaultPool extends \Google\Model
{
  public $artifactStorage;
  public $serviceAccount;

  public function setArtifactStorage($artifactStorage)
  {
    $this->artifactStorage = $artifactStorage;
  }
  public function getArtifactStorage()
  {
    return $this->artifactStorage;
  }
  public function setServiceAccount($serviceAccount)
  {
    $this->serviceAccount = $serviceAccount;
  }
  public function getServiceAccount()
  {
    return $this->serviceAccount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DefaultPool::class, 'Google_Service_CloudDeploy_DefaultPool');
