<?php


    namespace Strategy_Pattern\DuckBehaviours {

        /**
         * Concrete class for regular old flying ducks
         */
        class Fly implements IFlyBehaviour {

            /**
             * Returns a string "is flying"
             * @return string
             */
            public function fly() {
                return "Is flying";
            }
        }
    }