import { useParams } from "react-router-dom";
import { useState, useEffect } from "react";
import {Modules} from './Modules'
import API from '../api'

export const Page = (isHome) => {
  const {slug} = useParams();
  const [page, setPage] = useState({});

  const getPage = async () => {
    let slug = isHome ? 'home' : slug;
    const response = await API(slug, 'pages');
    setPage(response);
  };

console.log("isHome",isHome)

  useEffect(() => {
    getPage();

  }, [slug]);

  return (
    <>
      <h1>{ page?.title?.rendered}</h1>
      <Modules modules={page?.acf?.modules}/>
    </>
  )
}
