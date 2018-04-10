<?php

    namespace Strategy_Pattern\DuckBehaviours;

    /**
     * Concrete class of Squeak for not real plastic fake ducks...
     */
    class Squeak implements IQuackBehaviour {

        /**
         * Returns the string "Squeak"
         * @return string
         */
        public function quack()
        {
            return "Squeak";
        }


    }