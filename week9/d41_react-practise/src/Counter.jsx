import './counter.scss'
import { useState, useEffect } from 'react';

export default function Counter() {

    const [count, setCount] = useState(0);

    const upOne = () => {
        setCount(count + 1);
    }

    const downOne = () => {
        setCount(Math.max(0, count - 1));
    }

    return (
        <div class="counter">
            <button onClick={downOne}>-</button>
            <p>{count}</p>
            <button onClick={upOne}>+</button>
        </div>

    )
}