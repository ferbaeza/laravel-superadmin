import './login.scss';
import axiosClient from '../../shared/http/AxiosClient';
import React, { useState } from 'react';

function Login() {

  // const redirect = useNavigate();

  const [userEmail, setUserEmail] = useState('');
  const [userPassword, setUserPassword] = useState('');
  const [response, setResponse] = useState();

  async function fetchData(userEmail, userPassword) {
    const response = await axiosClient.post('login', {
      "email": userEmail,
      "password": userPassword,
    });
    setResponse(response);
  }

  const handleSubmit = (e) => {
    e.preventDefault();
    fetchData(userEmail, userPassword);

    if (response) {
      // redirect('/dashboard');
    }
  }

  return (
    <div className="login">
      <div className="login-form">
        <h1>SuperAdmin</h1>
        <form className="login-form" onSubmit={handleSubmit}>
          <input className="login-input" type="text" placeholder="Username" onChange={e => setUserEmail(e.target.value)} />
          <input className="login-input" type="password" placeholder="Password" onChange={e => setUserPassword(e.target.value)} />
          <button className="login-button" type="submit">Login</button>
        </form>
      </div>

    </div>
  );
}

export default Login;
