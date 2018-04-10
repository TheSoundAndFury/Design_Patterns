<?php

    namespace Strategy_Pattern\DuckBehaviours {

        /**
         * Concrete class for ducks that don't make any sound.
         */
        class SilentQuack implements IQuackBehaviour {

            /**
             * Returns and empty string since it doesn't make noise
             * @return string
             */
            public function quack() {
                return "........";
            }
        }
    }