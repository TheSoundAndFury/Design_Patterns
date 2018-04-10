<?php

    namespace Strategy_Pattern\DuckBehaviours;

    /**
     * Interface for all display behaviours to use
     */
    interface IDisplayBehaviour {

        /**
         * Abstract class for any object that uses DisplayBehaviour
         * @return string
         */
        public function display();
    }