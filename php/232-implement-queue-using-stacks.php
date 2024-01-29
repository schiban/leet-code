class MyQueue {
    /**
     */
    public $queue;
    function __construct() {
        $this->queue = [];
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        return $this->queue[] = $x;
    }
  
    /**
     * @return Integer
     */
    function pop() {
        return array_shift($this->queue);
    }
  
    /**
     * @return Integer
     */
    function peek() {
        return $this->queue[0];
    }
  
    /**
     * @return Boolean
     */
    function empty() {
        return $this->queue == [];
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */