<?php
declare(strict_types=1);
/**
 * Copyright 2019 Luis Alberto Pabón Flores
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace App\Generator\Entity;

use PHPDocker\Project\ServiceOptions\MariaDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MariaDBOptions entity and validation
 *
 * @package App\Entity\ORM
 * @author  Luis A. Pabon Flores
 */
class MariaDBOptions extends MariaDB
{
    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"mariadbOptions"})
     * @Assert\NotNull(groups={"mariadbOptions"})
     * @Assert\Length(min=1, max=128)
     */
    protected $version = self::VERSION_104;

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"mariadbOptions"})
     * @Assert\NotNull(groups={"mariadbOptions"})
     * @Assert\Length(min=1, max=128)
     */
    protected $rootPassword;

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"mariadbOptions"})
     * @Assert\NotNull(groups={"mariadbOptions"})
     * @Assert\Length(min=1, max=128)
     */
    protected $databaseName;

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"mariadbOptions"})
     * @Assert\NotNull(groups={"mariadbOptions"})
     * @Assert\Length(min=1, max=128)
     */
    protected $username;

    /**
     * @var string
     *
     * @Assert\NotBlank(groups={"mariadbOptions"})
     * @Assert\NotNull(groups={"mariadbOptions"})
     * @Assert\Length(min=1, max=128)
     */
    protected $password;

    /**
     * Redirect hasMariaDB to enabled.
     *
     * @param bool $hasMariaDB
     *
     * @return self
     */
    public function setHasMariaDB(bool $hasMariaDB = false): self
    {
        return $this->setEnabled($hasMariaDB);
    }

    /**
     * @return bool
     */
    public function hasMariaDB(): bool
    {
        return $this->isEnabled();
    }
}
