import { GraduationCap, Award, Users, Target } from 'lucide-react';

export default function About() {
  return (
    <section id="about" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-6">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            About Me
          </h2>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            Driven by curiosity and a passion for innovation
          </p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
          <div>
            <div className="aspect-square rounded-2xl bg-gradient-to-br from-blue-100 to-blue-50 flex items-center justify-center">
              <img
                src="/images/about-me.jpg"
                alt="Engineering workspace"
                className="w-full h-full object-cover rounded-2xl"
              />
            </div>
          </div>

          <div className="space-y-6">
            <h3 className="text-3xl font-bold text-gray-900">
              Engineering Student & Innovator
            </h3>
            <p className="text-gray-700 leading-relaxed text-lg">
              I'm a high school senior with a deep passion for engineering and technology. 
              Watching my dad work as a mechanical engineer from a young age inspired me, 
              and I’ve been captivated by the endless possibilities of turning ideas into 
              reality through engineering.
            </p>
            <p className="text-gray-700 leading-relaxed text-lg">
              My journey has grown from drawing simple isometric sketches to designing 
              functional bike suspensions and other mechanisms. I believe engineering isn’t 
              just about solving technical problems—it’s about developing solutions that 
              make a meaningful impact on people’s lives.
            </p>
            <p className="text-gray-700 leading-relaxed text-lg">
              Outside of engineering, I’m an active member of my school’s Aero team, where 
              we are designing and building a SUAV for the SUAS Competition. I also contribute to 
              the HelioTech program, collaborating at workshops to construct a solar-powered racecar.
            </p>
          </div>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div className="bg-blue-50 rounded-xl p-6 text-center">
            <div className="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-4">
              <GraduationCap size={32} />
            </div>
            <h4 className="text-3xl font-bold text-gray-900 mb-2">3.71</h4>
            <p className="text-gray-600 font-medium">GPA</p>
          </div>

          <div className="bg-blue-50 rounded-xl p-6 text-center">
            <div className="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-4">
              <Award size={32} />
            </div>
            <h4 className="text-3xl font-bold text-gray-900 mb-2">8+</h4>
            <p className="text-gray-600 font-medium">Awards & Honors</p>
          </div>

          <div className="bg-blue-50 rounded-xl p-6 text-center">
            <div className="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-4">
              <Target size={32} />
            </div>
            <h4 className="text-3xl font-bold text-gray-900 mb-2">10+</h4>
            <p className="text-gray-600 font-medium">Projects Completed</p>
          </div>

          <div className="bg-blue-50 rounded-xl p-6 text-center">
            <div className="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-4">
              <Users size={32} />
            </div>
            <h4 className="text-3xl font-bold text-gray-900 mb-2">100+</h4>
            <p className="text-gray-600 font-medium">Volunteer Hours</p>
          </div>
        </div>

        <div className="mt-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl p-8 md:p-12 text-white">
          <h3 className="text-3xl font-bold mb-6">My Goals</h3>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <h4 className="text-xl font-semibold mb-3 flex items-center gap-2">
                <Target size={20} />
                Academic
              </h4>
              <p className="text-blue-100 leading-relaxed">
                Pursue a degree in Mechanical or Aerospace Engineering at a top-tier
                university, continuing to push the boundaries of innovation and technology.
              </p>
            </div>
            <div>
              <h4 className="text-xl font-semibold mb-3 flex items-center gap-2">
                <Target size={20} />
                Career
              </h4>
              <p className="text-blue-100 leading-relaxed">
                Develop sustainable technologies that address real-world challenges,
                from renewable energy systems to accessible medical devices.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
