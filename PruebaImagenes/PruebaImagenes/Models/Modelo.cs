namespace PruebaImagenes.Models
{
    using System;
    using System.Data.Entity;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Linq;

    public partial class Modelo : DbContext
    {
        public Modelo()
            : base("name=Modelo")
        {
        }

        public virtual DbSet<estudiantes> estudiantes { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            modelBuilder.Entity<estudiantes>()
                .Property(e => e.nombre)
                .IsUnicode(false);

            modelBuilder.Entity<estudiantes>()
                .Property(e => e.apellidos)
                .IsUnicode(false);

            modelBuilder.Entity<estudiantes>()
                .Property(e => e.especialidad)
                .IsUnicode(false);

            modelBuilder.Entity<estudiantes>()
                .Property(e => e.grado)
                .IsUnicode(false);
        }
    }
}
