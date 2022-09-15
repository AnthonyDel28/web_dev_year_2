<?php
declare(strict_types=1);
/**
 * Sytème de banissement via une propriété statique
 */
class User8
{
    private string $name;
    private static $website;
    private static array $ban = [];

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public static function getBan(): string
    {
        $val = '';
        foreach(self::$ban as $value) {
            $val .= $value.'<br>';
        }
        return $val;
    }

    /**
     * @param string $ban
     * @return void
     */
    public function setBan(string $ban): void
    {
        self::$ban[] .= $ban;
    }

    /**
     * Get the value of website
     */
    public function getWebsite()
    {
        return self::$website;
    }

    /**
     * Set the value of website
     *
     * @param string $website
     * @return string
     */
    public function setWebsite(string $website): void
    {
        self::$website = $website;

    }
}