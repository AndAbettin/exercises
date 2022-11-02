import UserInfo from "./UserInfo"

export default function TopNavigation() {
    return (
        <div className="top-navigation">

            <nav>
                <a href="#">Home</a>
                <a href="#">What we do</a>
                <a href="#">Contact</a>
            </nav>

            <UserInfo />

        </div>
    )
}