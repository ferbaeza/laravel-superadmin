import './styles/usersCharts.scss';


function UsersCharts({usersData}) {

    console.log('usersData', usersData);
    return (
        <div className="users-data">
            {usersData.map((user)=>(
                    <div className="user-data">
                            <span>{user.id}</span>
                            <span>{user.name}</span>
                            <span>{user.email}</span>
                    </div>
            ))}
            <h1>UsersCharts</h1>
        </div>
    );
}



export default UsersCharts;

