import './sidebar.scss';
import { useNavigate } from 'react-router';
import { useEffect, useState } from 'react';
import axiosClient from '../../shared/http/AxiosClient';



function Sidebar() {
  let navigate = useNavigate();
  const publicPath = process.env.PUBLIC_URL + '/icons/';

  const handleCardClick = (name) => {
    console.log('name', name);
    navigate("/" + name);
  }

  const [title, setTitle] = useState();
  const [menu, setMenu] = useState([]);

  async function fetchMenuData() {
    const response = await axiosClient.get("dashboard/menu", {});
    setTitle(response.data.message);
    setMenu(response.data.data);
  }

  useEffect(() => {
    fetchMenuData();
  }, []);

  return (
    <div className="sidebar" key={title}>
        {menu.map((item) => (
          <div className="menu">
            <div className="menu-secciones">
              <div className="seccion-titulo" onClick={() => {
                if (item.codigoPadre !== null || item.codigo === '000') {
                  handleCardClick(`${item.url}`);
                }
              }} key={item.id}>
                <span>
                  <img className='logo-sidebar' src={publicPath + item.icon} alt={item.icon} />
                </span>
                <span className='span-list-titulo'>{item.nombre}</span>
            </div>
              <div className="menu-hijos">
                {item.subMenus?.data.map((child) => (
                  <div className="list-hijo" onClick={() => {
                    handleCardClick(`${child.url}`);
                  }}
                    key={child.id}>
                    <span>
                      <img className='logo-sidebar' src={publicPath + child.icon} alt={child.icon} />
                    </span>
                    <span className="menu-hijos">
                      {child.nombre}
                    </span>
                  </div>
                ))}
              </div>
            </div>
          </div>
        ))}
        <div className="footer-sidebar-main">
          <div className="footer-sidebar">
            <span className="footer-firma">Dashboard</span>
            <span className="footer-firma">Fernando Baeza</span>
          </div>
        </div>
    </div>
  );
}

export default Sidebar;
