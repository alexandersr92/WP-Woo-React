import { useEffect } from "react";
import {Hero, ImageModule} from './modules/index'


export const Modules = (modules) => {

  const listOfModules = (modules) => { 

    if (modules) {

      return modules.map((module, index) => {
       return (
          <div className="Aqui" key={index}>
            {module.acf_fc_layout === 'hero' && <Hero {...module} />}
            {module.acf_fc_layout === 'imageModule' && <ImageModule {...module} />}
          </div>
          
       )
      })
    }
  };

  useEffect(() => {
    listOfModules();
  }, []);
  return(
    <>
      {listOfModules(modules.modules)}
    </>

  )
}
