<?php

    namespace Strategy_Pattern\DuckBehaviours {

        /**
         * Concrete class for weird ducks that can teleport around
         */
        class teleport implements IFlyBehaviour {

            /**
             * returns a string "what the...?"
             * @return string
             */
            public function fly()
            {
                return "What the...?";
            }
        }
    }