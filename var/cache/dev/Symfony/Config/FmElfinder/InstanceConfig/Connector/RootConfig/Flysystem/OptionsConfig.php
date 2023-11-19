<?php

namespace Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'LocalConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'FtpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'SftpConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'AzureConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'AwsS3V2Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'AwsS3V3Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'CopyComConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'GridfsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'ZipConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'DropboxConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Options'.\DIRECTORY_SEPARATOR.'RackspaceConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $local;
    private $ftp;
    private $sftp;
    private $azure;
    private $awsS3V2;
    private $awsS3V3;
    private $copyCom;
    private $gridfs;
    private $zip;
    private $dropbox;
    private $rackspace;
    private $_usedProperties = [];

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\LocalConfig|$this
     */
    public function local($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['local'] = true;
            $this->local = $value;

            return $this;
        }

        if (!$this->local instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\LocalConfig) {
            $this->_usedProperties['local'] = true;
            $this->local = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\LocalConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "local()" has already been initialized. You cannot pass values the second time you call local().');
        }

        return $this->local;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\FtpConfig|$this
     */
    public function ftp($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['ftp'] = true;
            $this->ftp = $value;

            return $this;
        }

        if (!$this->ftp instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\FtpConfig) {
            $this->_usedProperties['ftp'] = true;
            $this->ftp = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\FtpConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "ftp()" has already been initialized. You cannot pass values the second time you call ftp().');
        }

        return $this->ftp;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\SftpConfig|$this
     */
    public function sftp($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['sftp'] = true;
            $this->sftp = $value;

            return $this;
        }

        if (!$this->sftp instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\SftpConfig) {
            $this->_usedProperties['sftp'] = true;
            $this->sftp = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\SftpConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sftp()" has already been initialized. You cannot pass values the second time you call sftp().');
        }

        return $this->sftp;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AzureConfig|$this
     */
    public function azure($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['azure'] = true;
            $this->azure = $value;

            return $this;
        }

        if (!$this->azure instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AzureConfig) {
            $this->_usedProperties['azure'] = true;
            $this->azure = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AzureConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "azure()" has already been initialized. You cannot pass values the second time you call azure().');
        }

        return $this->azure;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V2Config|$this
     */
    public function awsS3V2($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['awsS3V2'] = true;
            $this->awsS3V2 = $value;

            return $this;
        }

        if (!$this->awsS3V2 instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V2Config) {
            $this->_usedProperties['awsS3V2'] = true;
            $this->awsS3V2 = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V2Config($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "awsS3V2()" has already been initialized. You cannot pass values the second time you call awsS3V2().');
        }

        return $this->awsS3V2;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3Config|$this
     */
    public function awsS3V3($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['awsS3V3'] = true;
            $this->awsS3V3 = $value;

            return $this;
        }

        if (!$this->awsS3V3 instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3Config) {
            $this->_usedProperties['awsS3V3'] = true;
            $this->awsS3V3 = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3Config($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "awsS3V3()" has already been initialized. You cannot pass values the second time you call awsS3V3().');
        }

        return $this->awsS3V3;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\CopyComConfig|$this
     */
    public function copyCom($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['copyCom'] = true;
            $this->copyCom = $value;

            return $this;
        }

        if (!$this->copyCom instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\CopyComConfig) {
            $this->_usedProperties['copyCom'] = true;
            $this->copyCom = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\CopyComConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "copyCom()" has already been initialized. You cannot pass values the second time you call copyCom().');
        }

        return $this->copyCom;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\GridfsConfig|$this
     */
    public function gridfs($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['gridfs'] = true;
            $this->gridfs = $value;

            return $this;
        }

        if (!$this->gridfs instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\GridfsConfig) {
            $this->_usedProperties['gridfs'] = true;
            $this->gridfs = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\GridfsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "gridfs()" has already been initialized. You cannot pass values the second time you call gridfs().');
        }

        return $this->gridfs;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\ZipConfig|$this
     */
    public function zip($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['zip'] = true;
            $this->zip = $value;

            return $this;
        }

        if (!$this->zip instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\ZipConfig) {
            $this->_usedProperties['zip'] = true;
            $this->zip = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\ZipConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "zip()" has already been initialized. You cannot pass values the second time you call zip().');
        }

        return $this->zip;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\DropboxConfig|$this
     */
    public function dropbox($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['dropbox'] = true;
            $this->dropbox = $value;

            return $this;
        }

        if (!$this->dropbox instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\DropboxConfig) {
            $this->_usedProperties['dropbox'] = true;
            $this->dropbox = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\DropboxConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "dropbox()" has already been initialized. You cannot pass values the second time you call dropbox().');
        }

        return $this->dropbox;
    }

    /**
     * @return \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\RackspaceConfig|$this
     */
    public function rackspace($value = [])
    {
        if (!\is_array($value)) {
            $this->_usedProperties['rackspace'] = true;
            $this->rackspace = $value;

            return $this;
        }

        if (!$this->rackspace instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\RackspaceConfig) {
            $this->_usedProperties['rackspace'] = true;
            $this->rackspace = new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\RackspaceConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "rackspace()" has already been initialized. You cannot pass values the second time you call rackspace().');
        }

        return $this->rackspace;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('local', $value)) {
            $this->_usedProperties['local'] = true;
            $this->local = \is_array($value['local']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\LocalConfig($value['local']) : $value['local'];
            unset($value['local']);
        }

        if (array_key_exists('ftp', $value)) {
            $this->_usedProperties['ftp'] = true;
            $this->ftp = \is_array($value['ftp']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\FtpConfig($value['ftp']) : $value['ftp'];
            unset($value['ftp']);
        }

        if (array_key_exists('sftp', $value)) {
            $this->_usedProperties['sftp'] = true;
            $this->sftp = \is_array($value['sftp']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\SftpConfig($value['sftp']) : $value['sftp'];
            unset($value['sftp']);
        }

        if (array_key_exists('azure', $value)) {
            $this->_usedProperties['azure'] = true;
            $this->azure = \is_array($value['azure']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AzureConfig($value['azure']) : $value['azure'];
            unset($value['azure']);
        }

        if (array_key_exists('aws_s3_v2', $value)) {
            $this->_usedProperties['awsS3V2'] = true;
            $this->awsS3V2 = \is_array($value['aws_s3_v2']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V2Config($value['aws_s3_v2']) : $value['aws_s3_v2'];
            unset($value['aws_s3_v2']);
        }

        if (array_key_exists('aws_s3_v3', $value)) {
            $this->_usedProperties['awsS3V3'] = true;
            $this->awsS3V3 = \is_array($value['aws_s3_v3']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3Config($value['aws_s3_v3']) : $value['aws_s3_v3'];
            unset($value['aws_s3_v3']);
        }

        if (array_key_exists('copy_com', $value)) {
            $this->_usedProperties['copyCom'] = true;
            $this->copyCom = \is_array($value['copy_com']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\CopyComConfig($value['copy_com']) : $value['copy_com'];
            unset($value['copy_com']);
        }

        if (array_key_exists('gridfs', $value)) {
            $this->_usedProperties['gridfs'] = true;
            $this->gridfs = \is_array($value['gridfs']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\GridfsConfig($value['gridfs']) : $value['gridfs'];
            unset($value['gridfs']);
        }

        if (array_key_exists('zip', $value)) {
            $this->_usedProperties['zip'] = true;
            $this->zip = \is_array($value['zip']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\ZipConfig($value['zip']) : $value['zip'];
            unset($value['zip']);
        }

        if (array_key_exists('dropbox', $value)) {
            $this->_usedProperties['dropbox'] = true;
            $this->dropbox = \is_array($value['dropbox']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\DropboxConfig($value['dropbox']) : $value['dropbox'];
            unset($value['dropbox']);
        }

        if (array_key_exists('rackspace', $value)) {
            $this->_usedProperties['rackspace'] = true;
            $this->rackspace = \is_array($value['rackspace']) ? new \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\RackspaceConfig($value['rackspace']) : $value['rackspace'];
            unset($value['rackspace']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['local'])) {
            $output['local'] = $this->local instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\LocalConfig ? $this->local->toArray() : $this->local;
        }
        if (isset($this->_usedProperties['ftp'])) {
            $output['ftp'] = $this->ftp instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\FtpConfig ? $this->ftp->toArray() : $this->ftp;
        }
        if (isset($this->_usedProperties['sftp'])) {
            $output['sftp'] = $this->sftp instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\SftpConfig ? $this->sftp->toArray() : $this->sftp;
        }
        if (isset($this->_usedProperties['azure'])) {
            $output['azure'] = $this->azure instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AzureConfig ? $this->azure->toArray() : $this->azure;
        }
        if (isset($this->_usedProperties['awsS3V2'])) {
            $output['aws_s3_v2'] = $this->awsS3V2 instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V2Config ? $this->awsS3V2->toArray() : $this->awsS3V2;
        }
        if (isset($this->_usedProperties['awsS3V3'])) {
            $output['aws_s3_v3'] = $this->awsS3V3 instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\AwsS3V3Config ? $this->awsS3V3->toArray() : $this->awsS3V3;
        }
        if (isset($this->_usedProperties['copyCom'])) {
            $output['copy_com'] = $this->copyCom instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\CopyComConfig ? $this->copyCom->toArray() : $this->copyCom;
        }
        if (isset($this->_usedProperties['gridfs'])) {
            $output['gridfs'] = $this->gridfs instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\GridfsConfig ? $this->gridfs->toArray() : $this->gridfs;
        }
        if (isset($this->_usedProperties['zip'])) {
            $output['zip'] = $this->zip instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\ZipConfig ? $this->zip->toArray() : $this->zip;
        }
        if (isset($this->_usedProperties['dropbox'])) {
            $output['dropbox'] = $this->dropbox instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\DropboxConfig ? $this->dropbox->toArray() : $this->dropbox;
        }
        if (isset($this->_usedProperties['rackspace'])) {
            $output['rackspace'] = $this->rackspace instanceof \Symfony\Config\FmElfinder\InstanceConfig\Connector\RootConfig\Flysystem\Options\RackspaceConfig ? $this->rackspace->toArray() : $this->rackspace;
        }

        return $output;
    }

}
