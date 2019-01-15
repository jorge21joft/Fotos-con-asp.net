using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.IO;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using PruebaImagenes.Models;

namespace PruebaImagenes.Controllers
{
    public class estudiantesController : Controller
    {
        private Modelo db = new Modelo();

        // GET: estudiantes
        public ActionResult Index()
        {
            return View(db.estudiantes.ToList());
        }

        // GET: estudiantes/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            estudiantes estudiantes = db.estudiantes.Find(id);
            if (estudiantes == null)
            {
                return HttpNotFound();
            }
            return View(estudiantes);
        }

        // GET: estudiantes/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: estudiantes/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "id,nombre,apellidos,especialidad,grado")] estudiantes estudiantes, HttpPostedFileBase file)
        {
            if (file != null)
            {
                using (MemoryStream ms = new MemoryStream())
                {
                    file.InputStream.CopyTo(ms);
                    byte[] array = ms.GetBuffer();

                    estudiantes.imagen = array;
                }

            }

            if (ModelState.IsValid)
            {
                db.estudiantes.Add(estudiantes);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(estudiantes);
        }

        // GET: estudiantes/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            estudiantes estudiantes = db.estudiantes.Find(id);
            if (estudiantes == null)
            {
                return HttpNotFound();
            }
            return View(estudiantes);
        }

        // POST: estudiantes/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "id,nombre,apellidos,especialidad,grado,imagen")] estudiantes estudiantes)
        {
            if (ModelState.IsValid)
            {
                db.Entry(estudiantes).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(estudiantes);
        }

        // GET: estudiantes/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            estudiantes estudiantes = db.estudiantes.Find(id);
            if (estudiantes == null)
            {
                return HttpNotFound();
            }
            return View(estudiantes);
        }

        // POST: estudiantes/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            estudiantes estudiantes = db.estudiantes.Find(id);
            db.estudiantes.Remove(estudiantes);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }

        public ActionResult ImagenEstudiante(int id)
        {

            byte[] imageData = db.estudiantes.FirstOrDefault(i => i.id == id)?.imagen;
            if (imageData != null)
            {
                return File(imageData, "image/png"); // se le pasa el arreglo de byte a convertir a archivo y el format a dar.
            }
            return null;
        }

    }
}
