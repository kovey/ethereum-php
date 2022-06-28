<?php
/**
 * This file is part of the PHPEthereumTools package
 *
 * PHP Version 7.1
 * 
 * @category PHPEthereumTools
 * @package  PHPEthereumTools
 * @author   Micky Socaci <micky@nowlive.ro>
 * @license  https://github.com/mickys/php-eth-tools/blob/master/LICENSE.md MIT
 * @link     https://github.com/mickys/php-eth-tools/
 */
namespace Tests;


use Ethereum\ERC20;
use Ethereum\EtherscanApi;
use PHPUnit\Framework\TestCase as BaseTestCase;

class ERC20Test extends BaseTestCase
{
    const CONTRACT_ADDRESS = '0xdAC17F958D2ee523a2206206994597C13D831ec7';

    const INFURA_KEY = '8275f7b717754213a1c07e22939b324d';
    const ETHERSCAN_KEY = 'YXXNZIP9U6YYDF5N7P6CSXXR8MQI4Z5BIR';

    const WALLET_PRIVATE_KEY = '09b3d8965dc9ac93375750f253b48ea0672342c6b0ccf6110b78627851ef9f61';
    const WALLET_ADDRESS = '0x44Bad390e785e12c92bf9B9C4671C89B79f7959A';

    private function getERC20($contractAddress = self::CONTRACT_ADDRESS)
    {
        //$erc20 = new ERC20($contractAddress, 8, new EtherscanApi(self::ETHERSCAN_KEY, 'rinkeby'));
        $erc20 = new ERC20($contractAddress, 8, new EtherscanApi(self::ETHERSCAN_KEY));
        return $erc20;
    }

    public function testBalanceApi()
    {
        $res = $this->getERC20()->balanceByApi(self::WALLET_ADDRESS);
        var_dump($res);

        $this->assertTrue(true);
    }

    /**
    public function testBalance()
    {
        $res = $this->getERC20()->balance(self::WALLET_ADDRESS);
        var_dump($res);

        $this->assertTrue(true);
    }
    **/

    /**
    public function testTransfer() {
        $res = $this->getERC20()->transfer(
            self::WALLET_PRIVATE_KEY,
            '0xcbec8ec09f94c80852e85693547f72b99ea2f327',
            1);
        var_dump($res);

        $this->assertTrue(true);
    }
    **/
}
