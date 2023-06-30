import { useParams } from "react-router-dom";
import { useState, useEffect } from "react";
import API from '../api'

export const Page = () => {
  const {slug} = useParams();
  const [page, setPage] = useState({});

const getPage = async () => {
  const response = await API(slug, 'pages');
  console.log("response",response);
  setPage(response);
};

useEffect(() => {
  getPage();
}, [slug]);


  return (
    <>
      <h1>{ page?.title?.rendered}</h1>
    </>
  )
}
