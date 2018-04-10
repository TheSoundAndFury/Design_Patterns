<?php

    namespace Strategy_Pattern\DuckBehaviours;

    /**
     * An interface for all Quack Behaviours to use.
     */

    interface IQuackBehaviour {

        /**
         * Abstract Method for all Quack objects
         * @return string
         */
        public function quack();


    }