<?php
declare(strict_types = 1);

/**
 * Un utilisateur va pouvoir consulter des articles validés par un admin
 */


class User {

    private string $name;
    protected string $password;
    protected static array $articles = ['Symfony 06' => TRUE, 'PHP 8.2' => FALSE,
        'CSS 3' => TRUE, 'HTML5' => FALSE];

    public function __construct(string $name, string $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function getArticles() :void {
        foreach(self::$articles as $key => $value) {
            if($value == TRUE){
                print $key . '<br>';
            }
        }
}
}