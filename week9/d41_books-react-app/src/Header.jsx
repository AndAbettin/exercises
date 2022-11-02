import './Header.scss';

export default function Header({ cart_items }) {

    return (
        <header>
            HEADER
            <div className="cart">
                <p>{cart_items} Items in cart</p>
            </div>
        </header>
    )
}