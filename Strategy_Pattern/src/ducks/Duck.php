<?php

    namespace Strategy_Pattern\Ducks;
    use Strategy_Pattern\DuckBehaviours\IFlyBehaviour;
    use Strategy_Pattern\DuckBehaviours\IQuackBehaviour;

    /**
     * Parent Abstract class for use by all Duck Children.
     */
        abstract class Duck {

            /**
             * Generic object for Fly behaviour
             * @var FlyBehaviour
             */
            protected $FlyBehaviour;

            /**
             * Generic Object for Quack Behaviour
             * @var QuackBehaviour
             */
            protected $QuackBehaviour;

            /**
             * Abstract function we'll use to display our creatures
             */
            public abstract function display();

            /**
             * Assigns fly behaviour if it needs to be overwritten
             */
            public function setFlyBehaviour(IFlyBehaviour $flyBehav) {
                $this->FlyBehaviour = $flyBehav;
            }

            /**
             * Assigns quake behaviour if it needs to be overwritten
             */
            public function setQuackBehaviour(IQuackBehaviour $quackBehav) {
                $this->QuackBehaviour = $quackBehav;
            }

            /**
             * Performs Fly on Object
             * @return string
             */
            public function doFly() {
                return $this->FlyBehaviour->fly();
            }

            /**
             * Performs Quack on Object
             * @return string
             */
            public function doQuake() {
                return $this->QuackBehaviour->quack();
            }


        }