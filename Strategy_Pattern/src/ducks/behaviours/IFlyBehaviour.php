<?php

    namespace Strategy_Pattern\DuckBehaviours;

    /**
     * Interface for all FLY behaviours to use
     */
    interface IFlyBehaviour {

        /**
         * Abstract class for any object to uses FlyBehaviour
         * @return string
         */
        public function fly();
    }