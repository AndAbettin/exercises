import logo from './logo.svg';
import './App.css';
import { useState, useEffect } from 'react';
import Book from './Book';
import Header from './Header';


function App() {

  const [book_data, setBookData] = useState(null);
  const [cart, setCart] = useState([]);


  const loadBookData = async () => {
    // request and fetch response
    const response = await fetch('https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php');
    // parse response and get data
    const data = await response.json();
    // change state of data, re-renders component
    setBookData(data);
  }

  useEffect(() => {
    loadBookData();
  }, [])

  const addItemToCart = (book_id) => {
    setCart([
      ...cart,
      book_id
    ])
  }

  const removeItemFromCart = (book_id) => {
    const copy = [...cart];
    const found_at_index = copy.indexOf(book_id);
    if (found_at_index !== -1) {
      copy.splice(found_at_index, 1);
    }
    setCart(copy)
  }

  return (
    <div className="App">

      <Header
        cart_items={cart.length}
      />

      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />

        {/* <h1>
          Latest Books
        </h1> */}

        <ul className='book-list'>
          {
            book_data === null
              ? <li>Loading...</li>
              : book_data.map(book => {

                return <Book
                  key={book.id}
                  {...book}
                  addItemToCart={addItemToCart}
                  removeItemFromCart={removeItemFromCart}
                />

              })
          }
        </ul>

      </header>
    </div>
  );
}

export default App;
