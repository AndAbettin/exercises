import logo from './logo.svg';
import './App.css';
import Header from './Header';
import Footer from './Footer';
import ProductList from './ProductList';
import Search from './Search';



function App() {
  return (

    <div id="page">

      <Header />

      <div id="main">

        <Search />

        <div className="content">
          <h1>Products</h1>

          <ProductList />

        </div>

      </div>

      <Footer />

    </div>
  );
}

export default App;
