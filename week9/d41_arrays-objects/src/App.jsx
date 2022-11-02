import logo from './logo.svg';
import './App.css';
import info from './books.json';
import { useState, useEffect } from 'react';
import Book from './Book';

function App() {

  const [data, setData] = useState(null);

  useEffect(() => {
    setData(info);
  }, [])

  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        {
          data === null
            ? <p>loading...</p>
            : data.map(book => { return <Book key={book.id} {...book} /> })
        }
      </header>
    </div>
  );
}

export default App;
