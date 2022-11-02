

export default function Books(book) {
    return (
        <div className="book">
            <h4><a href={book.website}>{book.title}</a></h4>
            <h6>By {book.author}</h6>
            <ul>
                <li>{book.description}</li>
            </ul>
        </div>
    )
}