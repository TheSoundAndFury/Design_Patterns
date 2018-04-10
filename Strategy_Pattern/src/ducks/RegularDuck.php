<?php

    namespace Strategy_Pattern\Ducks;

    use Strategy_Pattern\DuckBehaviours\Quack;
    use Strategy_Pattern\DuckBehaviours\Fly;

    /**
     * Do all the behaviours for a regular duck
     */
    class RegularDuck extends Duck {

        /**
         * Instatiate bejaviour for object
         */
        public function __construct(){
            $this->QuackBehaviour = new Quack();
            $this->FlyBehaviour = new Fly();
        }

        /**
         * Returns text
         * @return string
         */
        public function display()
        {
            return "This is a regular duck. It does regular duck things.";
        }
    }