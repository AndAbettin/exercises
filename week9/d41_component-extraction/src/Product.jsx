

export default function Product(product) {

    return (
        <div className="product">
            <img src={product.img_url} alt="" />
            <div className="name">{product.name}</div>
        </div>
    )
}