<?php

namespace Example\Tests;

use PHPUnit\Framework\TestCase;

class PathInfoTest extends TestCase
{
  /**
   * @dataProvider paths
   */
  public function testBasename($path, $expected)
  {
    $actual = pathinfo($path, PATHINFO_BASENAME);

    self::assertEquals($expected, $actual);
  }

  public function paths()
  {
    return [
      [
        '/files/Ываыав_Ываыва_onlineIin1_2021-01-13-15:10:49.jpeg',
        'Ываыав_Ываыва_onlineIin1_2021-01-13-15:10:49.jpeg',
      ],
      [
        '/files/ashdjk_onlineIin1_2021-01-13-15:10:49.jpeg',
        'ashdjk_onlineIin1_2021-01-13-15:10:49.jpeg',
      ],
    ];
  }
}
