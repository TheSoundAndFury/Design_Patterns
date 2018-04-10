<?php

    namespace Strategy_Pattern\DuckBehaviours {

        /**
         * Concrete class for duck someone gave jetpacks to for some reason.
         */
        class JetPack implements IFlyBehaviour {

            /**
             * Returns a string "Jet packs were yes.."
             * @return string
             */
            public function fly() {
                return "Jet packs were yes..";
            }
        }
    }