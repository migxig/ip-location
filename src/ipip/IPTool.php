<?php
/**
 * @author Mingxing.chen
 * @date 2024/11/20 14:13
 */
declare(strict_types=1);

namespace ipip;


use ipip\db\Reader;

class IPTool
{
    /**
     * @var Reader
     */
    protected $reader;

    public function __construct($ipdbPath = '')
    {
        if (empty($ipdbPath)) {
            $ipdbPath = dirname(__DIR__) . '/../data/vipdata.ipdb';
        }

        $this->reader = new Reader($ipdbPath);
    }

    public function findMap($ip, $language = 'CN')
    {
        return $this->reader->findMap($ip, $language);
    }
}