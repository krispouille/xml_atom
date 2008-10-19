<?php
require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__).'/ElementTest.php';
require_once dirname(__FILE__).'/FeedTest.php';
require_once dirname(__FILE__).'/PersonTest.php';
require_once dirname(__FILE__).'/AuthorTest.php';
require_once dirname(__FILE__).'/ContributorTest.php';
require_once dirname(__FILE__).'/PublishedTest.php';
require_once dirname(__FILE__).'/UpdatedTest.php';
require_once dirname(__FILE__).'/TitleTest.php';
require_once dirname(__FILE__).'/CategoryTest.php';
require_once dirname(__FILE__).'/EntryTest.php';
require_once dirname(__FILE__).'/GeneratorTest.php';
require_once dirname(__FILE__).'/IconTest.php';
require_once dirname(__FILE__).'/IdTest.php';
require_once dirname(__FILE__).'/LinkTest.php';
require_once dirname(__FILE__).'/LogoTest.php';
require_once dirname(__FILE__).'/RightsTest.php';
require_once dirname(__FILE__).'/SourceTest.php';
require_once dirname(__FILE__).'/SubtitleTest.php';
require_once dirname(__FILE__).'/SummaryTest.php';
require_once dirname(__FILE__).'/TextTest.php';

class AllTests
{
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('lbi-atom');
        
        $suite->addTestSuite('ElementTest');
        $suite->addTestSuite('FeedTest');
        $suite->addTestSuite('PersonTest');
        $suite->addTestSuite('AuthorTest');
        $suite->addTestSuite('ContributorTest');
        $suite->addTestSuite('PublishedTest');
        $suite->addTestSuite('UpdatedTest');
        $suite->addTestSuite('TitleTest');
        $suite->addTestSuite('CategoryTest');
        $suite->addTestSuite('EntryTest');
        $suite->addTestSuite('GeneratorTest');
        $suite->addTestSuite('IconTest');
        $suite->addTestSuite('IdTest');
        $suite->addTestSuite('LinkTest');
        $suite->addTestSuite('LogoTest');
        $suite->addTestSuite('RightsTest');
        $suite->addTestSuite('SourceTest');
        $suite->addTestSuite('SubtitleTest');
        $suite->addTestSuite('SummaryTest');
        $suite->addTestSuite('TextTest');

        return $suite;
    }
}
