<?php namespace Tests\PHPUnit;

use \PHPUnit_Framework_TestCase as TestCase;
use \Encryptor\Suite\Disguise;

/**
 *  
 */
final class DisguiseTest extends TestCase
{
	/**
     * @test
     * @expectedSuccess
	 */
    public function testEncrypting()
    {
        $disguise = new Disguise();
        $dataInput = 'This is Rock `Ǹ` Roll!';
        
        $encrypted = $disguise->obscure($dataInput);
        
        $this->assertEquals('ck4yYlNCeWNwQnljcGhHVj1FQ2JzOW1VZ0FHdUhER0k=', $encrypted);
    }

    /**
     * @test
     * @expectedSuccess
	 */
    public function testDecrypted()
    {
        $disguise = new Disguise();
        $dataInput = 'This is Rock `Ǹ` Roll!';
        
        $encrypted = $disguise->obscure($dataInput);
        $decrypted = $disguise->illumin($encrypted);
        
        $this->assertEquals('This is Rock `Ǹ` Roll!', $decrypted);
    }

    /**
     * @test
     * @expectedSuccess
     */
    public function testScapeTagsInObscure()
    {
        $disguise = new Disguise();
        $dataInput = '<?php phpinfo(); ?>';
        
        $encrypted = $disguise->obscure($dataInput);
        
        $this->assertEquals('V2F3aEdjZ0FIYXc5ek8weG1KPT13TzBkbUovQXlPcGd5Ym01', $encrypted);
    }

    /**
     * @test
     * @expectedSuccess
     */
    public function testScapeTagsInIllumin()
    {
        $disguise = new Disguise();
        $dataInput = '<?php phpinfo(); ?>';
        
        $encrypted = $disguise->obscure($dataInput);
        $decrypted = $disguise->illumin($encrypted);
        
        $this->assertEquals('&lt;?php phpinfo(); ?&gt;', $decrypted);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgumentExceptionInObscure()
    {
        $disguise = new Disguise();
        $dataInput = '';
        
        $encrypted = $disguise->obscure($dataInput);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function testInvalidArgumentExceptionInIllumin()
    {
        $disguise = new Disguise();
        $dataInput = 'This is Rock `Ǹ` Roll!';
        
        $encrypted = $disguise->obscure($dataInput);
        $decrypted = $disguise->illumin('');
    }

}