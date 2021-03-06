<?php

namespace Swoft\Rpc\Packer\Json;

use Swoft\Bean\Annotation\Bean;
use Swoft\Helper\JsonHelper;
use Swoft\Rpc\Packer\PackerInterface;

/**
 * Class JsonPacker
 * @Bean()
 */
class JsonPacker implements PackerInterface
{
    /**
     * pack data
     *
     * @param mixed $data
     * @return string
     * @throws \InvalidArgumentException
     */
    public function pack($data): string
    {
        return JsonHelper::encode($data, JSON_UNESCAPED_UNICODE);
    }

    /**
     * unpack data
     *
     * @param mixed $data
     * @return mixed
     * @throws \InvalidArgumentException
     */
    public function unpack($data)
    {
        return JsonHelper::decode($data, true);
    }
}
