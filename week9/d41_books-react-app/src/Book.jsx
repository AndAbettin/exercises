import './Book.scss';
import { useState } from 'react';

export default function Book(book) {

    const [amountInCart, setAmountInCart] = useState(0);

    const style = {
        width: '3em',
        border: '1px solid black'
    }

    const addToCart = () => {
        setAmountInCart(amountInCart + 1);
        book.addItemToCart(book.id);
    }

    const removeFromCart = () => {
        setAmountInCart(Math.max(0, amountInCart - 1));
        book.removeItemFromCart(book.id);
    }

    return (
        <li className="book">
            {book.title}

            <div className="book__in-cart">
                <button onClick={removeFromCart}>-</button>
                {amountInCart}
                <button onClick={addToCart}>+</button>
            </div>

        </li>
    )
}