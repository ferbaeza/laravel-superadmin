import { useEffect } from "react";
import { useNavigate } from "react-router-dom";

const RefreshPage = () => {
  const navigate = useNavigate();

  useEffect(() => {
    navigate(-1);
  }, [navigate]);

  return null;
};

export default RefreshPage;
