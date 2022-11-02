import Product from './Product';
import { useState, useEffect } from 'react';

export default function ProductList() {
    const [products, setProducts] = useState([])
    const loadData = () => {
        setProducts([
            {
                "id": 1,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/propulsion-gel.jpg",
                "name": "Propulsion gel"
            },
            {
                "id": 2,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/weight-cube.jpg",
                "name": "Weight cube"
            },
            {
                "id": 3,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/friendly-cube.jpg",
                "name": "A friend"
            },
            {
                "id": 4,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/portal-gun.jpg",
                "name": "Portal gun"
            },
            {
                "id": 5,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/defense-robot.jpg",
                "name": "Home-defense robot"
            },
            {
                "id": 6,
                "img_url": "https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/cake.jpg",
                "name": "Cake (not a lie)"
            }
        ])
    }

    useEffect(() => {
        loadData();
    }, [])

    return (
        <div className="product-list">
            {
                products === []
                    ? <p>Loading...</p>
                    : products.map(product => {
                        return <Product
                            key={product.id}
                            {...product} />
                    })
            }

        </div>
    )
}