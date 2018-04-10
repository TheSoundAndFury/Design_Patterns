<?php

    namespace Strategy_Pattern\DuckBehaviours;

    /**
     * Concrete class of Quack for regular ducks to use
     */
    Class Quack implements IQuackBehaviour {

        /**
         * Returns the string "Quack"
         * @return string
         */
        public function quack()
        {
           return "Quack!";
        }
    }