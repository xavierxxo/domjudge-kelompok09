<?php declare(strict_types=1);

namespace App\Tests\Controller\API;

use App\DataFixtures\Test\EnableJavaEntrypointFixture;

class LanguageControllerTest extends BaseTest
{
    protected $apiEndpoint = 'languages';

    protected $expectedObjects = [
        'cpp'  => [
            'name'                 => 'C++',
            'entry_point_required' => false,
            'entry_point_name'     => null,
            'extensions'           => ['cpp', 'cc', 'cxx', 'c++'],
        ],
        'java' => [
            'name'                 => 'Java',
            'entry_point_required' => true,
            'entry_point_name'     => 'Main class',
            'extensions'           => ['java'],
        ],
    ];

    // Kotlin has allow_submit=false by default, so we don't expect it.
    protected $expectedAbsent = ['kotlin', 'nonexistent'];

    protected static $fixtures = [
        EnableJavaEntrypointFixture::class,
    ];
}
